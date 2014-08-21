//
//  CDLoginEmployeeViewController.m
//  cargoDispatcher
//
//  Created by Macbook Air on 8/20/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import "CDLoginEmployeeViewController.h"

@interface CDLoginEmployeeViewController ()

    @property CDAccessEmployee *accessEmployee;
@end

@implementation CDLoginEmployeeViewController

@synthesize accessEmployee;

- (void)viewDidLoad
{
    accessEmployee = [CDAccessEmployee sharedManager];
    accessEmployee.accessEmployeeDelegate=self;
    [super viewDidLoad];
    // Do any additional setup after loading the view.
}

-(void)configureKeywords{
    
    [self.cuentaTextField setDelegate:self];
    [self.cuentaTextField setReturnKeyType:UIReturnKeyDone];
    [self.cuentaTextField addTarget:self
                                 action:@selector(hidekeyword)
                       forControlEvents:UIControlEventEditingDidEndOnExit];
    [super viewDidLoad];
    
    self.claveTextField.secureTextEntry=YES;
    [self.claveTextField setDelegate:self];
    [self.claveTextField setReturnKeyType:UIReturnKeyDone];
    [self.claveTextField addTarget:self
                                   action:@selector(hidekeyword)
                         forControlEvents:UIControlEventEditingDidEndOnExit];
    [super viewDidLoad];
    
}

-(void)hidekeyword
{
    [self.cuentaTextField resignFirstResponder];
    [self.claveTextField resignFirstResponder];
}


-(void)employeeFetched:(CDEmployee *)CDEmployee{
    if(CDEmployee.account==nil){
        UIAlertView *alert = [[UIAlertView alloc] initWithTitle:@"Mensaje de Error"
                                                        message:@"Los datos ingresados no son validos"
                                                       delegate:self
                                              cancelButtonTitle:@"OK"
                                              otherButtonTitles:nil];
        [alert show];
    }
    else{
        
        [self performSegueWithIdentifier:@"abrirPerfilEmployee" sender:CDEmployee];
    }
    
    
}

#pragma mark - Navigation

// In a storyboard-based application, you will often want to do a little preparation before navigation
- (void)prepareForSegue:(UIStoryboardSegue *)segue sender:(id)sender
{
    if ([[segue identifier] isEqualToString:@"abrirPerfilEmployee"])
    {
        // Get reference to the destination view controller
        CDEmployeePerfilViewController *perfilViewController = [segue destinationViewController];
        perfilViewController.employee = (CDEmployee *)sender;
        
    }
    
}

- (IBAction)login:(id)sender {
    if([self.claveTextField.text length]!=0&&[self.cuentaTextField.text length]!=0){
        [accessEmployee logearse:self.claveTextField.text usuario:self.cuentaTextField.text];}
    else
    {
        UIAlertView *alert = [[UIAlertView alloc] initWithTitle:@"Mensaje de Error"
                                                        message:@"Rellene toda la información (Ja!)"
                                                       delegate:self
                                              cancelButtonTitle:@"OK"
                                              otherButtonTitles:nil];
        [alert show];
    }
    
}
    


@end
