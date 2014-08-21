//
//  CDLoginEmployeeViewController.h
//  cargoDispatcher
//
//  Created by Macbook Air on 8/20/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import <UIKit/UIKit.h>
#import "CDAccessEmployee.h"
#import "CDEmployeePerfilViewController.h"

@interface CDLoginEmployeeViewController : UIViewController <UITextFieldDelegate,AccessEmployeeDelegate>


@property (weak, nonatomic) IBOutlet UITextField *cuentaTextField;
@property (weak, nonatomic) IBOutlet UITextField *claveTextField;

- (IBAction)login:(id)sender;

@end
