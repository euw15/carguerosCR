//
//  CDAccesoEmployee.m
//  cargoDispatcher
//
//  Created by Macbook Air on 8/6/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import "CDAccessCustomer.h"


@implementation CDAccessCustomer

@synthesize accessCustomerDelegate;

+ (id)sharedManager {
    static CDAccessCustomer *CDAccesoEmployee = nil;
    static dispatch_once_t onceToken;
    dispatch_once(&onceToken, ^{
        CDAccesoEmployee = [[self alloc] init];
    });
    return CDAccesoEmployee;
}

- (id)init {
    if (self = [super init]) {
       
    }
    return self;
}

-(CDCustomer *)getActualCustomer{
    return customer;
}

-(void)logearse:(NSString *)clave usuario:(NSString *)usuario
{
    //Generates URL. Check ENVIRONMENT of EnvConfig in appdelegate.
    NSURL *apiURL = [[NSURL alloc] initWithString:[NSString stringWithFormat:@"http://cargodispatcher.elasticbeanstalk.com/api/cdcustomer/login?password=%@&account=%@",clave,usuario]];
    
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
                                   CDCustomer * accessCustomer= [[CDCustomer alloc] init];
                                   customer= [accessCustomer createCustomer:data];
                                 
                                   [self.accessCustomerDelegate customerFetched:customer];
                                    }
                           }];
}
@end
