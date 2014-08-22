//
//  CDAccessContainers.m
//  cargoDispatcher
//
//  Created by Macbook Air on 8/21/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import "CDAccessContainers.h"


@implementation CDAccessContainers

@synthesize accessBillingDelegate;

+ (id)sharedManager
{
    static CDAccessContainers *CDAccessContainers = nil;
    static dispatch_once_t onceToken;
    dispatch_once(&onceToken, ^{
        CDAccessContainers = [[self alloc] init];
        CDAccessContainers.downloadedContaners=NO;
    });
    return CDAccessContainers;
}

-(BOOL)hasContainerArrive{
    if(self.downloadedContaners==NO){
        [self getContainerRouteList];
    }
    else{
        for(CDContainerRoute *containerRoute in self.containers)
        {
           
            [self askContainerArrive:containerRoute];
        }
    }
    return YES;
}

-(void)getContainerRouteList{
    //Generates URL. Check ENVIRONMENT of EnvConfig in appdelegate.
    NSURL *apiURL = [[NSURL alloc] initWithString:[NSString stringWithFormat:@"http://cargodispatcher.elasticbeanstalk.com/api/CDContainer/containersInRoute"]];
    
    
    //Adds jSON Body
	NSURLRequest *request = [PeticionesApi createAPIGetRequest:apiURL];
    
    //Send asynchronous request **** Hacerlo sincrono y devolver un numero?
    [NSURLConnection sendAsynchronousRequest:request
                                       queue:[NSOperationQueue mainQueue]
                           completionHandler:^(NSURLResponse *response, NSData *data, NSError *error) {
                               if (error) {
                                   NSLog(@"Error");
                               }
                               else {
                                   CDContainerRoute *containerRoute= [[CDContainerRoute alloc] init];
                                   self.containers = [containerRoute createContainerRouteList:data];
                                   self.downloadedContaners=YES;
                               }
                           }];
}

-(void)askContainerArrive:(CDContainerRoute *)containerRoute{
    //Generates URL. Check ENVIRONMENT of EnvConfig in appdelegate.
    NSURL *apiURL = [[NSURL alloc] initWithString:[NSString stringWithFormat:@"http://cargodispatcher.elasticbeanstalk.com/api/CDContainer/containerArrive?idContainer=%i&route=%i",containerRoute.idContaier,containerRoute.idRoute]];
    
    
    //Adds jSON Body
	NSURLRequest *request = [PeticionesApi createAPIGetRequest:apiURL];
    
    //Send asynchronous request **** Hacerlo sincrono y devolver un numero?
    [NSURLConnection sendAsynchronousRequest:request
                                       queue:[NSOperationQueue mainQueue]
                           completionHandler:^(NSURLResponse *response, NSData *data, NSError *error) {
                               if (error) {
                                   NSLog(@"Error");
                               }
                               else {
                                   if([self askContainerArriveAux:data]){
                                       [self.accessBillingDelegate containerArrive:[NSString stringWithFormat:@"%i",containerRoute.idContaier]];
                                   }
                               }
                           }];
}

-(BOOL)askContainerArriveAux:(NSData *)dataContainer{
    NSError *error = nil;
    NSArray *jsonArray = [NSJSONSerialization JSONObjectWithData:dataContainer options:kNilOptions error:&error];
    
    if (error != nil)
    {
        NSLog(@"Error parsing JSON.");
    }
    else
    {
        for (id object in jsonArray)
        {
            if(object!=nil)
            {
                @try {
                    
                    int hasArrive  = [[object objectForKey:@"containerArrive"] intValue];
                                        if(hasArrive == 1){
                                            return YES;
                                        }
                }
                @catch (NSException * e) {
                    
                }
                @finally {
                    
                }
                
            }
            
        }
        

    }
    return NO;
}




@end
