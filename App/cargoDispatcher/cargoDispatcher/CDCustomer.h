//
//  CDCustomer.h
//  cargoDispatcher
//
//  Created by Macbook Air on 8/6/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import <Foundation/Foundation.h>

@interface CDCustomer : NSObject


@property (nonatomic, strong) NSString * name;
@property                   int  account;
@property                   int score;
@property (nonatomic, strong) NSString *telephone;
@property (nonatomic, strong) NSString *lastName;
@property (nonatomic, strong) NSString *type;

-(CDCustomer *)createCustomer:(NSData *)customerData;


@end

