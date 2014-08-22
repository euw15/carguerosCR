//
//  CDCreatePackageViewController.m
//  cargoDispatcher
//
//  Created by Macbook Air on 8/20/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import "CDCreatePackageViewController.h"

@interface CDCreatePackageViewController ()

@property CDAccessPackages *accessPackages;

@end

@implementation CDCreatePackageViewController

@synthesize accessPackages, textFieldCuentaCliente,textFieldDescripcion,textFieldPeso,textFieldPrecio,textFieldTamano,textFieldTipo;

- (void)viewDidLoad
{
    
    accessPackages = [CDAccessPackages sharedManager];
    accessPackages.accessPackageDelegate=self;
    
    [self configurekeyword];
    [super viewDidLoad];
    // Do any additional setup after loading the view.
}

- (void)didReceiveMemoryWarning
{
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

-(void)packageCreated{
    UIAlertView *alert = [[UIAlertView alloc] initWithTitle:@"Ventana Informativa"
                                                    message:@"El paquete fue creado con exito "
                                                   delegate:self
                                          cancelButtonTitle:@"OK"
                                          otherButtonTitles:nil];
    [alert show];
    
    [self performSegueWithIdentifier:@"volverPerfil" sender:nil];
    
}

-(void)configurekeyword{
    
    [self addPropertisTextFields:self.textFieldPrecio];
    [self addPropertisTextFields:self.textFieldTamano];
    [self addPropertisTextFields:self.textFieldTipo];
    [self addPropertisTextFields:self.textFieldCuentaCliente];
    
}

-(void)addPropertisTextFields:(UITextField *)textTield{
    [textTield setDelegate:self];
    [textTield setReturnKeyType:UIReturnKeyDone];
    [textTield addTarget:self
                                 action:@selector(hidekeyword)
                       forControlEvents:UIControlEventEditingDidEndOnExit];
    
}

-(void)hidekeyword
{
    [self.textFieldPeso resignFirstResponder];
    [self.textFieldTamano resignFirstResponder];
    [self.textFieldDescripcion resignFirstResponder];
    [self.textFieldTipo resignFirstResponder];
    [self.textFieldCuentaCliente resignFirstResponder];
}

- (IBAction)createPackage:(id)sender
{
    if([self.textFieldCuentaCliente.text length]!=0&&[self.textFieldTipo.text length]!=0&&[self.textFieldDescripcion.text length]!=0&&[self.textFieldTamano.text length]!=0&&[self.textFieldPeso.text length]!=0){
    CDPackage *package= [[CDPackage alloc] init];
    package.weight = [textFieldPeso.text intValue];
    package.size = [textFieldTamano.text intValue];
    package.type = textFieldTipo.text;
    package.description = textFieldDescripcion.text;
    
    [accessPackages createPackage:package idUsuario:[textFieldCuentaCliente.text intValue]];
    }
    else{
        UIAlertView *alert = [[UIAlertView alloc] initWithTitle:@"Ventana Informativa"
                                                        message:@"Llene todos los espacios!!"
                                                       delegate:self
                                              cancelButtonTitle:@"OK"
                                              otherButtonTitles:nil];
        [alert show];
    }
}

//implement this UITextFiledDelegate Protocol method in the same class
- (BOOL)textField:(UITextField *)textField shouldChangeCharactersInRange:(NSRange)range replacementString:(NSString *)string {
    if ([textField.text length] > 100)
        return NO;
    else
        return YES;
}

@end
