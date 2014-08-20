//
//  CDAccessPackages.h
//  cargoDispatcher
//
//  Created by Macbook Air on 8/17/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import <Foundation/Foundation.h>
#import "PeticionesApi.h"
#import "CDPackage.h"


@protocol AccessPackageDelegate
-(void)packageFetched:(NSArray *)NSArrayPackage;
@end

@interface CDAccessPackages : NSObject

+ (id)sharedManager;

-(void)getPackagesList:(NSString *)idUsuario;

@property (nonatomic, weak) id <AccessPackageDelegate> accessPackageDelegate;
@property NSArray * packagesList;

@end
