//
//  PeticionesApi.h
//  cargoDispatcher
//
//  Created by Macbook Air on 8/16/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import <Foundation/Foundation.h>

@interface PeticionesApi : NSObject

+ (NSMutableURLRequest*)createAPIRequest:(NSString*)path;
+ (NSDictionary*)parseResponseData:(NSData*)data;


+ (NSMutableURLRequest*)createAPIGetRequest:(NSURL*)url;
+ (NSURLRequest*)createURLRequest:(NSURL *)apiURL withBody:(NSString *)body withMethod:(NSString*)method;
+ (NSArray*)getJsonArrayFromResponseData:(NSData*)data;


@end
