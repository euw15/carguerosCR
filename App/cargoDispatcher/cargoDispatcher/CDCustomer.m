//
//  CDCustomer.m
//  cargoDispatcher
//
//  Created by Macbook Air on 8/6/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import "CDCustomer.h"

@implementation CDCustomer


-(CDCustomer *)createCustomer:(NSData *)customerData
{
    CDCustomer *customer= [[CDCustomer alloc] init];
    
    NSError *error = nil;
    NSArray *jsonArray = [NSJSONSerialization JSONObjectWithData:customerData options:kNilOptions error:&error];
    
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
            if(object!=nil)
            {
                @try {
                    
                    customer.name      = [object objectForKey:@"name"];
                    customer.lastName  = [object objectForKey:@"lastName"];
                    customer.account   = [[object objectForKey:@"account"] intValue];
                    customer.score     = [[object objectForKey:@"score"] intValue];
                    customer.type      = [object objectForKey:@"type"];
                    customer.telephone = [object objectForKey:@"telephone"];

                    
                }
                @catch (NSException * e) {
                    
                }
                @finally {
                    
                }
                
            }
   
        }
        
    }
    }
    return customer;
}

@end
