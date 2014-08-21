//
//  CDEmployee.h
//  cargoDispatcher
//
//  Created by Macbook Air on 8/6/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import <Foundation/Foundation.h>

@interface CDEmployee : NSObject

@property (nonatomic, strong) NSString * name;
@property                   int  account;
@property (nonatomic, strong) NSString *telephone;
@property (nonatomic, strong) NSString *lastName;
@property (nonatomic, strong) NSString *role;

+(CDEmployee *)createEmployee:(NSData *)employeeData;


@end
