//
//  CDBillingDetailsViewController.m
//  cargoDispatcher
//
//  Created by Macbook Air on 8/21/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import "CDBillingDetailsViewController.h"

@interface CDBillingDetailsViewController ()

@end

@implementation CDBillingDetailsViewController


- (void)viewDidLoad
{
   
    [self setLabelTitles];
    [super viewDidLoad];
    // Do any additional setup after loading the view.
}

- (void)didReceiveMemoryWarning
{
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}


-(void)setLabelTitles{
    CDAccessBilling * billingAccess= [CDAccessBilling sharedManager];
    CDBilling *billing= billingAccess.billing;
    self.labelDescount.text= [NSString stringWithFormat:@"Descuento: %i", billing.discount];
    self.labelFlete.text= [NSString stringWithFormat:@"Flete: %i", billing.freight];
    self.labelTax.text= [NSString stringWithFormat:@"Impuestos: %i", billing.tax];
    
}
/*
#pragma mark - Navigation

// In a storyboard-based application, you will often want to do a little preparation before navigation
- (void)prepareForSegue:(UIStoryboardSegue *)segue sender:(id)sender
{
    // Get the new view controller using [segue destinationViewController].
    // Pass the selected object to the new view controller.
}
*/

@end
