//
//  CDCreateNewEmployeeViewController.h
//  cargoDispatcher
//
//  Created by Macbook Air on 8/21/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import <UIKit/UIKit.h>
#import "CDAccessEmployee.h"

@interface CDCreateNewEmployeeViewController : UIViewController <AccessEmployeeDelegate>


@property (weak, nonatomic) IBOutlet UITextField *textFieldName;
@property (weak, nonatomic) IBOutlet UITextField *textFieldLastName;
@property (weak, nonatomic) IBOutlet UITextField *textFieldPhoneNumber;
@property (weak, nonatomic) IBOutlet UITextField *textFieldClave;

- (IBAction)createEmployee:(id)sender;


@end
