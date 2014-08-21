//
//  CDEmployeePerfilViewController.m
//  cargoDispatcher
//
//  Created by Macbook Air on 8/20/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import "CDEmployeePerfilViewController.h"

@interface CDEmployeePerfilViewController ()



@end

@implementation CDEmployeePerfilViewController

@synthesize employee,timerMethod;



- (void)viewDidLoad
{
    // Start timer and sets it to a property called saveTimer
    /*timerMethod = [NSTimer scheduledTimerWithTimeInterval:2.0
                                                      target:self
                                                    selector:@selector(consultarPeticiones:)
                                                    userInfo:nil
                                                     repeats:YES];*/
    [self mostrarInformacion];
    [super viewDidLoad];
    // Do any additional setup after loading the view.
}

-(void)askIfContainerArrive
{
    
}

- (void)didReceiveMemoryWarning
{
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

-(void)mostrarInformacion{
    CDAccessEmployee *accessEmployee = [CDAccessEmployee sharedManager];
    CDEmployee *actualEmployee= accessEmployee.employee;
    self.labelNombre.text = [NSString stringWithFormat:@"%@ %@" , actualEmployee.name, actualEmployee.lastName];
    self.labelRol.text = actualEmployee.role;
    self.labelTelefono.text= actualEmployee.telephone;
    
}




- (IBAction)cerrarSeccion:(id)sender {
    CDAccessEmployee *accessEmployee= [CDAccessEmployee sharedManager];
    accessEmployee.employee=nil;
    
    [self performSegueWithIdentifier:@"cerrarSeccion2" sender:nil];
}
@end
