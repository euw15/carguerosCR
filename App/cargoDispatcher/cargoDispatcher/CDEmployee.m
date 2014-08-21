//
//  CDEmployee.m
//  cargoDispatcher
//
//  Created by Macbook Air on 8/6/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import "CDEmployee.h"

@implementation CDEmployee

-(CDEmployee *)createEmployee:(NSData *)employeeData
{
    CDEmployee *employee= [[CDEmployee alloc] init];
    
    NSError *error = nil;
    NSArray *jsonArray = [NSJSONSerialization JSONObjectWithData:employeeData options:kNilOptions error:&error];
    
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
                employee.name      = [object objectForKey:@"name"];
                employee.lastName  = [object objectForKey:@"last_name"];
                employee.account   = [[object objectForKey:@"personIdPerson"] intValue];
                employee.telephone = [object objectForKey:@"telephone"];
                employee.role      = [object objectForKey:@"role"];
            }
        }
    }
    return employee;
    
    
}

@end
