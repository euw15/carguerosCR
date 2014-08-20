//
//  CDPackage.m
//  cargoDispatcher
//
//  Created by Macbook Air on 8/6/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import "CDPackage.h"

@implementation CDPackage

+(NSArray *)createPackageList:(NSData *)packageData
{
    NSMutableArray *arrayPackages= [[NSMutableArray alloc] init];
    
    NSError *error = nil;
    NSArray *jsonArray = [NSJSONSerialization JSONObjectWithData:packageData options:kNilOptions error:&error];
    
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
                CDPackage *package= [[CDPackage alloc] init];
                package.idPackages      = [object objectForKey:@"idPackages"];
                package.weight  = [[object objectForKey:@"weight"] intValue];
                package.size   = [[object objectForKey:@"size"] intValue];
                package.price     = [[object objectForKey:@"score"] intValue];
                package.type      = [object objectForKey:@"type"];
                package.description = [object objectForKey:@"description"];
                package.customerId = [[object objectForKey:@"customerId"] intValue];
                package.packageState = [object objectForKey:@"packageState"];
                package.containerArrivalDate = [object objectForKey:@"containerArrivalDate"];
                package.container = [object objectForKey:@"container"];
                
                [arrayPackages addObject:package];
            }
            
        }
    }
    return [[NSArray alloc] initWithArray:arrayPackages];
}


@end
