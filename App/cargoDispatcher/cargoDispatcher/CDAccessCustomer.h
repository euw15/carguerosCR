//
//  CDAccesoEmployee.h
//  cargoDispatcher
//
//  Created by Macbook Air on 8/6/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import <Foundation/Foundation.h>
#import "PeticionesApi.h"
#import "CDCustomer.h"


@protocol AccessCustomerDelegate
    -(void)customerFetched:(CDCustomer *)CDCustomer;
@end

@interface CDAccessCustomer : NSObject {
    CDCustomer *customer;
}

@property (nonatomic, retain) CDCustomer *customer;
@property (nonatomic, weak) id <AccessCustomerDelegate> accessCustomerDelegate;

+ (id)sharedManager;

-(CDCustomer *)getActualCustomer;
-(void)logearse:(NSString *)clave usuario:(NSString *)usuario;

@end
