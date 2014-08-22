//
//  CDBilling.h
//  cargoDispatcher
//
//  Created by Macbook Air on 8/6/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import <Foundation/Foundation.h>

@interface CDBilling : NSObject

@property NSInteger  costStorage;
@property NSInteger  discount;
@property NSInteger  freight;
@property NSInteger  idBilling;
@property NSInteger  tax;


-(NSArray *)createBillingList:(NSData *)billingData;

@end
