//
//  CDContainerRoute.m
//  cargoDispatcher
//
//  Created by Macbook Air on 8/21/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import "CDContainerRoute.h"

@implementation CDContainerRoute

@synthesize idContaier,idRoute;

-(NSArray *)createContainerRouteList:(NSData *)routeData
{
    NSMutableArray *containerRouteList= [[NSMutableArray alloc] init];
    
    NSError *error = nil;
    NSArray *jsonArray = [NSJSONSerialization JSONObjectWithData:routeData options:kNilOptions error:&error];
    
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
                    
                    CDContainerRoute * containerRoute= [[CDContainerRoute alloc] init];
                    containerRoute.idContaier      = [[object objectForKey:@"idContainer"] intValue];
                    containerRoute.idRoute  = [[object objectForKey:@"route"] intValue];
                    [containerRouteList addObject:containerRoute];
                    
                }
                @catch (NSException * e) {
                    
                }
                @finally {
                    
                }

            }
            
        }
    }
    return containerRouteList;
}
@end
