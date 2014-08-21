//
//  CDAccessEmployee.m
//  cargoDispatcher
//
//  Created by Macbook Air on 8/20/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import "CDAccessEmployee.h"

@implementation CDAccessEmployee

@synthesize accessEmployeeDelegate,employee;

+ (id)sharedManager {
    static CDAccessEmployee *CDAccessEmployee = nil;
    static dispatch_once_t onceToken;
    dispatch_once(&onceToken, ^{
        CDAccessEmployee = [[self alloc] init];
    });
    return CDAccessEmployee;
}

-(void)logearse:(NSString *)clave usuario:(NSString *)usuario
{
   
    //Generates URL. Check ENVIRONMENT of EnvConfig in appdelegate.
    NSURL *apiURL = [[NSURL alloc] initWithString:[NSString stringWithFormat:@"http://cargodispatcher.elasticbeanstalk.com/api/cdemployee/loginEmployee?password=%@&idEmployee=%@",clave,usuario]];
    
    //Adds jSON Body
	NSURLRequest *request = [PeticionesApi createAPIGetRequest:apiURL];
    
    //Send asynchronous request **** Hacerlo sincrono y devolver un numero?
    [NSURLConnection sendAsynchronousRequest:request
                                       queue:[NSOperationQueue mainQueue]
                           completionHandler:^(NSURLResponse *response, NSData *data, NSError *error) {
                               if (error) {
                                   NSLog(@"Error");
                               }
                               else {
                                   
                                   employee= [CDEmployee createEmployee:data];
                                   [self.accessEmployeeDelegate employeeFetched:employee];
                                
                               }
                           }];
}

-(void)crearEmpleado:(CDEmployee *)mEmployee clave:(NSString *)clave
{
    NSString *path = [NSString stringWithFormat:@"http://cargodispatcher.elasticbeanstalk.com/api/cdemployee/SingUp?name=%@&last_name=%@&telephone=%@&password=%@&role=1",mEmployee.name,mEmployee.lastName,mEmployee.telephone,clave];
  
    NSURL *apiURL = [[NSURL alloc] initWithString:[path stringByAddingPercentEscapesUsingEncoding:NSUTF8StringEncoding]];
    
    NSURLRequest *request =[PeticionesApi createURLRequest:apiURL withBody:@"" withMethod:@"POST"];
    //Send asynchronous request **** Hacerlo sincrono y devolver un numero?
    [NSURLConnection sendAsynchronousRequest:request
                                       queue:[NSOperationQueue mainQueue]
                           completionHandler:^(NSURLResponse *response, NSData *data, NSError *error) {
                               if (error) {
                                   NSLog(@"Error");
                               }
                               else {
                                   
                                   [self.accessEmployeeDelegate employeeCreated:[[NSString alloc] initWithData:data encoding:NSUTF8StringEncoding]];
                               }
                           }];
    
    
    
}
@end
