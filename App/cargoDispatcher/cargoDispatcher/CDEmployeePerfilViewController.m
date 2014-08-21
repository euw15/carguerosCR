//
//  CDEmployeePerfilViewController.m
//  cargoDispatcher
//
//  Created by Macbook Air on 8/20/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import "CDEmployeePerfilViewController.h"

@interface CDEmployeePerfilViewController ()

@property CDAccessEmployee *accessEmployee;

@end

@implementation CDEmployeePerfilViewController

@synthesize employee;

- (id)initWithNibName:(NSString *)nibNameOrNil bundle:(NSBundle *)nibBundleOrNil
{
    self = [super initWithNibName:nibNameOrNil bundle:nibBundleOrNil];
    if (self) {
        // Custom initialization
    }
    return self;
}

- (void)viewDidLoad
{
    [self mostrarInformacion];
    [super viewDidLoad];
    // Do any additional setup after loading the view.
}

- (void)didReceiveMemoryWarning
{
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

-(void)mostrarInformacion{
    self.labelNombre.text = [NSString stringWithFormat:@"%@ %@" , employee.name, employee.lastName];
    self.labelRol.text = employee.role;
    self.labelTelefono.text= employee.telephone;
    
}




@end
