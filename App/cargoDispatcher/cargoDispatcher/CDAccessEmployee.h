//
//  CDAccessEmployee.h
//  cargoDispatcher
//
//  Created by Macbook Air on 8/20/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import <Foundation/Foundation.h>
#import "PeticionesApi.h"
#import "CDEmployee.h"

@protocol AccessEmployeeDelegate
-(void)employeeFetched:(CDEmployee *)CDEmployee;
@end

@interface CDAccessEmployee : NSObject


@property (nonatomic, weak) id <AccessEmployeeDelegate> accessEmployeeDelegate;

+ (id)sharedManager;

-(void)logearse:(NSString *)clave usuario:(NSString *)usuario;

@end
