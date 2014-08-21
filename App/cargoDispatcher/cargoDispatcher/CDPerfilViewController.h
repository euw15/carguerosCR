//
//  PerfilViewController.h
//  cargoDispatcher
//
//  Created by Macbook Air on 8/17/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import <UIKit/UIKit.h>
#import "CDCustomer.h"
#import "CDAccessCustomer.h"

@interface CDPerfilViewController : UIViewController

@property CDCustomer * customer;

@property (weak, nonatomic) IBOutlet UILabel *nameUILabel;

@property (weak, nonatomic) IBOutlet UILabel *accountNumberLabel;
@property (weak, nonatomic) IBOutlet UILabel *accountTypeLabel;

@property (weak, nonatomic) IBOutlet UILabel *scoreLabel;

- (IBAction)cerrarSeccion:(id)sender;


@end
