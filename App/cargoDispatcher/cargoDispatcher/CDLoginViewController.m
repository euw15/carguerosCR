//
//  CDLoginViewController.m
//  cargoDispatcher
//
//  Created by Macbook Air on 8/6/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import "CDLoginViewController.h"

@interface CDLoginViewController ()

    @property CDAccessCustomer * accessCustomer;


@end

@implementation CDLoginViewController


- (void)viewDidLoad
{
    _accessCustomer = [CDAccessCustomer sharedManager];
    _accessCustomer.accessCustomerDelegate=self;
    [self configureKeywords];
    [super viewDidLoad];
    // Do any additional setup after loading the view.
}

- (void)didReceiveMemoryWarning
{
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}


- (IBAction)loginMethod:(id)sender
{
    CDAccessCustomer *accessCustomer= [CDAccessCustomer sharedManager];
    if([self.contrasenaTextField.text length]!=0&&[self.numeroCuentaTextField.text length]!=0){
        [accessCustomer logearse:self.contrasenaTextField.text usuario:self.numeroCuentaTextField.text];}
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

-(void)hidekeyword
{
    [self.contrasenaTextField resignFirstResponder];
    [self.numeroCuentaTextField resignFirstResponder];
}

-(void)configureKeywords{
    [self.contrasenaTextField setDelegate:self];
    [self.contrasenaTextField setReturnKeyType:UIReturnKeyDone];
    [self.contrasenaTextField addTarget:self
                       action:@selector(hidekeyword)
             forControlEvents:UIControlEventEditingDidEndOnExit];
    [super viewDidLoad];
    
    [self.numeroCuentaTextField setDelegate:self];
    [self.numeroCuentaTextField setReturnKeyType:UIReturnKeyDone];
    [self.numeroCuentaTextField addTarget:self
                                 action:@selector(hidekeyword)
                       forControlEvents:UIControlEventEditingDidEndOnExit];
    [super viewDidLoad];
    
}

-(void)customerFetched:(CDCustomer *)CDCustomer
{
    
    if(CDCustomer.account == nil){
        UIAlertView *alert = [[UIAlertView alloc] initWithTitle:@"Mensaje de Error"
                                                        message:@"Los datos ingresados no son validos"
                                                       delegate:self
                                              cancelButtonTitle:@"OK"
                                              otherButtonTitles:nil];
        [alert show];
    }
    else{
    
        [self performSegueWithIdentifier:@"abrirPerfil" sender:CDCustomer];
    }
    
}

// In a storyboard-based application, you will often want to do a little preparation before navigation
- (void)prepareForSegue:(UIStoryboardSegue *)segue sender:(id)sender
{
    if ([[segue identifier] isEqualToString:@"abrirPerfil"])
    {
        // Get reference to the destination view controller
        CDPerfilViewController *perfilViewController = [segue destinationViewController];
        perfilViewController.customer   = (CDCustomer *)sender;
        
    }
}



@end
