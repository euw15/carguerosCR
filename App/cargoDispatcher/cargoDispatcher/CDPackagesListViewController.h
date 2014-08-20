//
//  CDPackagesListViewController.h
//  cargoDispatcher
//
//  Created by Macbook Air on 8/17/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import <UIKit/UIKit.h>
#import "CDAccessPackages.h"
#import "CDDetalleViewController.h"

@interface CDPackagesListViewController : UIViewController <UITableViewDataSource, UITableViewDelegate,AccessPackageDelegate>

@property (weak, nonatomic) IBOutlet UITableView *listTableView;

@property NSArray * packagesList;

@end
