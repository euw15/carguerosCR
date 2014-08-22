//
//  CDBillingListViewController.h
//  cargoDispatcher
//
//  Created by Macbook Air on 8/21/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import <UIKit/UIKit.h>
#import "CDAccessBilling.h"
#import "CDAccessCustomer.h"
#import "CDBillingDetailsViewController.h"
#import "MBProgressHUD.h"

@interface CDBillingListViewController : UIViewController <AccessBillingDelegate,UITableViewDataSource, UITableViewDelegate>


@property (weak, nonatomic) IBOutlet UITableView *UITableViewListBilling;
@property (weak, nonatomic) IBOutlet UILabel *tituloFacturas;

@end
