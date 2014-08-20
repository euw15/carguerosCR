//
//  CDLoginViewController.h
//  cargoDispatcher
//
//  Created by Macbook Air on 8/6/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import <UIKit/UIKit.h>
#import "CDAccessCustomer.h"
#import "CDPerfilViewController.h"

@interface CDLoginViewController : UIViewController <UITextFieldDelegate,AccessCustomerDelegate> {
    UITextField *contrasenaTextField;
    UITextField *numeroCuentaTextField;
}

@property (weak, nonatomic) IBOutlet UITextField *contrasenaTextField;
@property (weak, nonatomic) IBOutlet UITextField *numeroCuentaTextField;



- (IBAction)loginMethod:(id)sender;

@end
