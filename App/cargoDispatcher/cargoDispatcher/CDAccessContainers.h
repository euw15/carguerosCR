//
//  CDAccessContainers.h
//  cargoDispatcher
//
//  Created by Macbook Air on 8/21/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import <Foundation/Foundation.h>
#import "PeticionesApi.h"
#import "CDContainerRoute.h"

@protocol AccessContainerDelegate
    -(void)containerArrive:(NSString *)idContainer;
@end

@interface CDAccessContainers : NSObject

+ (id)sharedManager;
-(BOOL)hasContainerArrive;

@property (nonatomic, weak) id <AccessContainerDelegate> accessBillingDelegate;
@property NSArray *containers;
@property bool downloadedContaners;

@end
