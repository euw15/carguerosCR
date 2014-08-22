//
//  CDContainerRoute.h
//  cargoDispatcher
//
//  Created by Macbook Air on 8/21/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import <Foundation/Foundation.h>

@interface CDContainerRoute : NSObject

@property int idContaier;
@property int idRoute;

-(NSArray *)createContainerRouteList:(NSData *)routeData;

@end
