//
//  CDAccessContainer.h
//  cargoDispatcher
//
//  Created by Macbook Air on 8/20/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import <Foundation/Foundation.h>
#import "CDCustomer.h"
#import "PeticionesApi.h"
#import "CDBilling.h"

@protocol AccessBillingDelegate
    -(void)billingListFethed:(NSArray *)billingList;
@end

@interface CDAccessBilling : NSObject

+ (id)sharedManager;
-(void)getAllCustomerBilling:(CDCustomer *)customer;
-(void)getBillingInfo:(CDCustomer *)customer;

@property CDBilling * billing;
@property (nonatomic, weak) id <AccessBillingDelegate> accessBillingDelegate;

@end
