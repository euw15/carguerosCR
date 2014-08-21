//
//  CDCreatePackageViewController.h
//  cargoDispatcher
//
//  Created by Macbook Air on 8/20/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import <UIKit/UIKit.h>
#import "CDAccessPackages.h"

@interface CDCreatePackageViewController : UIViewController <AccessPackageDelegate,UITextFieldDelegate>
{
    UITextField *textFieldPeso;
    UITextField *textFieldTamano;
    UITextField *textFieldTipo;
    UITextField *textFieldPrecio;
    UITextField *textFieldCuentaCliente;
    UITextView *textFieldDescripcion;
}

@property (strong, nonatomic) IBOutlet UITextField *textFieldPeso;
@property (strong, nonatomic) IBOutlet UITextField *textFieldTamano;
@property (strong, nonatomic) IBOutlet UITextField *textFieldTipo;
@property (strong, nonatomic) IBOutlet UITextField *textFieldPrecio;
@property (strong, nonatomic) IBOutlet UITextField *textFieldCuentaCliente;
@property (strong, nonatomic) IBOutlet UITextView *textFieldDescripcion;

- (IBAction)createPackage:(id)sender;

@end
    