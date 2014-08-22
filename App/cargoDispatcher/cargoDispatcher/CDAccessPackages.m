//
//  CDAccessPackages.m
//  cargoDispatcher
//
//  Created by Macbook Air on 8/17/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import "CDAccessPackages.h"

@implementation CDAccessPackages

@synthesize packagesList,accessPackageDelegate;

+ (id)sharedManager {
    static CDAccessPackages *CDAccessPackages = nil;
    static dispatch_once_t onceToken;
    dispatch_once(&onceToken, ^{
        CDAccessPackages = [[self alloc] init];
    });
    return CDAccessPackages;
}

- (id)init {
    if (self = [super init]) {
        
    }
    return self;
}

-(void)getPackagesList:(NSString *)idUsuario{
    //Generates URL. Check ENVIRONMENT of EnvConfig in appdelegate.
    NSURL *apiURL = [[NSURL alloc] initWithString:[NSString stringWithFormat:@"http://cargodispatcher.elasticbeanstalk.com/api/cdpackages/UserPackages?account=%@",idUsuario]];
    
    
	NSURLRequest *request = [PeticionesApi createAPIGetRequest:apiURL];
    
    //Send asynchronous request **** Hacerlo sincrono y devolver un numero?
    [NSURLConnection sendAsynchronousRequest:request
                                       queue:[NSOperationQueue mainQueue]
                           completionHandler:^(NSURLResponse *response, NSData *data, NSError *error) {
                               if (error) {
                                   NSLog(@"Error");
                               }
                               else {
                                    NSString* newStr = [[NSString alloc] initWithData:data encoding:NSUTF8StringEncoding];
                                   
                                   self.packagesList= [CDPackage createPackageList:data];
                                   [self.accessPackageDelegate packageFetched:self.packagesList];
                               }
                           }];

    
}


-(void)createPackage:(CDPackage *)package idUsuario:(int)idUsuario{
    NSString *path = [NSString stringWithFormat:@"http://cargodispatcher.elasticbeanstalk.com/api/cdPackages/createPackage?weight=%i&size=%i&type=%@&price=%i&description=%@&account=%i",package.weight,package.size,package.type,package.price,package.description,idUsuario];
    NSURL *apiURL = [[NSURL alloc] initWithString:[path stringByAddingPercentEscapesUsingEncoding:NSUTF8StringEncoding]];
    
    NSURLRequest *request =[PeticionesApi createURLRequest:apiURL withBody:@"" withMethod:@"POST"];
    //Send asynchronous request **** Hacerlo sincrono y devolver un numero?
    [NSURLConnection sendAsynchronousRequest:request
                                       queue:[NSOperationQueue mainQueue]
                           completionHandler:^(NSURLResponse *response, NSData *data, NSError *error) {
                               if (error) {
                                   NSLog(@"Error");
                               }
                               else {
                                  
                                   [self.accessPackageDelegate packageCreated];
                               }
                           }];

    
}

@end
