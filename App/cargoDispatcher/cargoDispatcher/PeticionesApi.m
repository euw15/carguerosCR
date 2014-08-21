//
//  PeticionesApi.m
//  cargoDispatcher
//
//  Created by Macbook Air on 8/16/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import "PeticionesApi.h"

@implementation PeticionesApi

+ (NSMutableURLRequest*)createAPIRequest:(NSString*)path {
    
	NSURL *remoteURL = [NSURL URLWithString:path];
    NSMutableURLRequest *request = [[NSMutableURLRequest alloc] initWithURL:remoteURL];
    request.HTTPMethod = @"POST";
    [request setValue:@"application/x-www-form-urlencoded" forHTTPHeaderField:@"Content-Type"];
    [request setValue:@"application/json" forHTTPHeaderField:@"Accept"];
	return request;
}


+ (NSDictionary*)parseResponseData:(NSData*)data {
    
	NSString *strData = [[NSString alloc]initWithData:data encoding:NSUTF8StringEncoding];
	NSData *webData = [strData dataUsingEncoding:NSUTF8StringEncoding];
	NSError *err;
	NSDictionary *jsonDict = [NSJSONSerialization JSONObjectWithData:webData options:0 error:&err];
	return jsonDict;
}

// Creates a GET request
+ (NSMutableURLRequest*)createAPIGetRequest:(NSURL*)url {
    
    NSMutableURLRequest *request = [[NSMutableURLRequest alloc] initWithURL:url];
    request.HTTPMethod = @"GET";
    [request setValue:@"application/x-www-form-urlencoded" forHTTPHeaderField:@"Content-Type"];
	return request;
}

//For POST / DELETE request
+ (NSURLRequest*)createURLRequest:(NSURL *)apiURL withBody:(NSString *)body withMethod:(NSString*)method {
    
    NSMutableURLRequest *request = [[NSMutableURLRequest alloc] initWithURL:apiURL];
    request.HTTPMethod = method;
    [request setValue:@"application/json" forHTTPHeaderField:@"Content-Type"];
    [request setValue:@"application/json" forHTTPHeaderField:@"Accept"];
    //[request setHTTPBody:[body dataUsingEncoding:NSUTF8StringEncoding]];
	return request;
}

//Get json array from respose
+ (NSArray*)getJsonArrayFromResponseData:(NSData*)data {
    
    //Parse response data
    NSError *error = nil;
    NSArray *jsonArray = [NSJSONSerialization JSONObjectWithData:data options:kNilOptions error:&error];
    return jsonArray;
}




@end
