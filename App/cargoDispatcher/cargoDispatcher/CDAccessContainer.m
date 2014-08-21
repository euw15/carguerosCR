//
//  CDAccessContainer.m
//  cargoDispatcher
//
//  Created by Macbook Air on 8/20/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import "CDAccessContainer.h"

@implementation CDAccessContainer

+ (id)sharedManager {
    static CDAccessContainer *CDAccessContainer = nil;
    static dispatch_once_t onceToken;
    dispatch_once(&onceToken, ^{
        CDAccessContainer = [[self alloc] init];
    });
    return CDAccessContainer;
}



@end
