//
//  CDCreateNewEmployeeViewController.m
//  cargoDispatcher
//
//  Created by Macbook Air on 8/21/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import "CDCreateNewEmployeeViewController.h"

@interface CDCreateNewEmployeeViewController ()

@property CDAccessEmployee * accessEmployee;

@end

@implementation CDCreateNewEmployeeViewController

@synthesize accessEmployee;

- (void)viewDidLoad
{
    accessEmployee = [CDAccessEmployee sharedManager];
    accessEmployee.accessEmployeeDelegate=self;
    [super viewDidLoad];
    self.textFieldClave.secureTextEntry=YES;
    // Do any additional setup after loading the view.
}


-(bool)validInputs{
    
    return YES;
}

- (IBAction)createEmployee:(id)sender {
    if([self validInputs]){
        CDEmployee * employee= [[CDEmployee alloc] init];
        employee.name = self.textFieldName.text;
        employee.lastName = self.textFieldLastName.text;
        employee.telephone = self.textFieldPhoneNumber.text;
        
        CDAccessEmployee * accessEmplotee= [CDAccessEmployee sharedManager];
        [accessEmplotee crearEmpleado:employee clave:self.textFieldClave.text];
    }
    else{
        UIAlertView *alert = [[UIAlertView alloc] initWithTitle:@"Error"
                                                        message:@"Los Datos son invalidos "
                                                       delegate:self
                                              cancelButtonTitle:@"OK"
                                              otherButtonTitles:nil];
        [alert show];

    }
}

-(void)employeeCreated:(NSString *)idEmployee;
{
    UIAlertView *alert = [[UIAlertView alloc] initWithTitle:@"Empleado Creado"
                                                    message:[NSString stringWithFormat:@"Su numero de cuenta es %@",idEmployee]
                                                   delegate:self
                                          cancelButtonTitle:@"OK"
                                          otherButtonTitles:nil];
    [alert show];
    
    [self performSegueWithIdentifier:@"login" sender:nil];
    
}
@end
