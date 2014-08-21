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
-(void)employeeCreated:(NSString *)idEmployee;
@end

@interface CDAccessEmployee : NSObject


@property (nonatomic, weak) id <AccessEmployeeDelegate> accessEmployeeDelegate;
@property CDEmployee *employee;

+ (id)sharedManager;

-(void)logearse:(NSString *)clave usuario:(NSString *)usuario;
-(void)crearEmpleado:(CDEmployee *)mEmployee clave:(NSString *)clave;

@end
