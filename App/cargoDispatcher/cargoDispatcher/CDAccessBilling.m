//
//  CDAccessContainer.m
//  cargoDispatcher
//
//  Created by Macbook Air on 8/20/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import "CDAccessBilling.h"

@implementation CDAccessBilling

@synthesize accessBillingDelegate,billing;

+ (id)sharedManager
{
    static CDAccessBilling *CDAccessContainer = nil;
    static dispatch_once_t onceToken;
    dispatch_once(&onceToken, ^{
        CDAccessContainer = [[self alloc] init];
    });
    return CDAccessContainer;
}


-(void)getAllCustomerBilling:(CDCustomer *)customer
{
    //Generates URL. Check ENVIRONMENT of EnvConfig in appdelegate.
    NSURL *apiURL = [[NSURL alloc] initWithString:[NSString stringWithFormat:@"http://cargodispatcher.elasticbeanstalk.com/api/CDBilling/showcostumerBilling?account=%i",customer.account]];
    
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
                                 
                                    CDBilling * accessBilling= [[CDBilling alloc] init];
                                   NSArray * billList = [accessBilling createBillingList:data];
                                   
                                    [self.accessBillingDelegate billingListFethed:billList];
                                   
                               }
                           }];
}

-(void)getBillingInfo:(CDCustomer *)customer
{
    //Generates URL. Check ENVIRONMENT of EnvConfig in appdelegate.
    NSURL *apiURL = [[NSURL alloc] initWithString:[NSString stringWithFormat:@"http://cargodispatcher.elasticbeanstalk.com/api/cdCustomerHasPackages/packageArrive?account=1&idPackage=1"]];
    
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
                                
                                 
                               }
                           }];
}





@end
