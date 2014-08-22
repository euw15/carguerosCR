//
//  CDBilling.m
//  cargoDispatcher
//
//  Created by Macbook Air on 8/6/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import "CDBilling.h"

@implementation CDBilling

@synthesize discount,costStorage,freight,idBilling,tax;

-(NSArray *)createBillingList:(NSData *)billingData;
{
   
    NSMutableArray *billList= [[NSMutableArray alloc] init];
    
    NSError *error = nil;
    NSArray *jsonArray = [NSJSONSerialization JSONObjectWithData:billingData options:kNilOptions error:&error];
    
   
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
               
                CDBilling *bill= [[CDBilling alloc] init];
              
                bill.costStorage      = [[object objectForKey:@"costStorage"] integerValue];
                bill.discount         = [[object objectForKey:@"discount"] integerValue];
                bill.freight          = [[object objectForKey:@"freight"] integerValue];
                bill.idBilling        = [[object objectForKey:@"idBilling"] integerValue];
                bill.tax              = [[object objectForKey:@"tax"] integerValue];
          
                [billList addObject:bill];
            }
        }
    }
    
    
    return [[NSArray alloc] initWithArray:billList];
 
}

@end
