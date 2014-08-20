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
                                   
                                   self.packagesList= [CDPackage createPackageList:data];
                                   [self.accessPackageDelegate packageFetched:self.packagesList];
                               }
                           }];

    
}

@end
