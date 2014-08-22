//
//  CDBillingDetailsViewController.h
//  cargoDispatcher
//
//  Created by Macbook Air on 8/21/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import <UIKit/UIKit.h>
#import "CDBilling.h"
#import "CDAccessBilling.h"

@interface CDBillingDetailsViewController : UIViewController


@property (weak, nonatomic) IBOutlet UILabel *labelTax;

@property (weak, nonatomic) IBOutlet UILabel *labelDescount;
@property (weak, nonatomic) IBOutlet UILabel *labelFlete;

@end
