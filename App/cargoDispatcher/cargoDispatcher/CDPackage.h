//
//  CDPackage.h
//  cargoDispatcher
//
//  Created by Macbook Air on 8/6/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import <Foundation/Foundation.h>

@interface CDPackage : NSObject

@property (nonatomic, strong) NSString * idPackages;
@property                     int        weight;
@property                     int        size;
@property                     int        price;
@property (nonatomic, strong) NSString * type;
@property (nonatomic, strong) NSString * description;
@property                     int        customerId;
@property (nonatomic, strong) NSString * packageState;
@property (nonatomic, strong) NSString * containerArrivalDate;
@property (nonatomic, strong) NSString * container;

+(NSArray *)createPackageList:(NSData *)packageData;

@end
