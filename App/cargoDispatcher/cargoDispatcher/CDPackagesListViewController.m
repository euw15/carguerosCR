//
//  CDPackagesListViewController.m
//  cargoDispatcher
//
//  Created by Macbook Air on 8/17/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import "CDPackagesListViewController.h"

@interface CDPackagesListViewController ()

@property CDAccessPackages *accessPackages;

@end

@implementation CDPackagesListViewController

@synthesize accessPackages;

- (id)initWithNibName:(NSString *)nibNameOrNil bundle:(NSBundle *)nibBundleOrNil
{
    self = [super initWithNibName:nibNameOrNil bundle:nibBundleOrNil];
    if (self) {
        // Custom initialization
    }
    return self;
}

- (void)viewDidLoad
{
    //configuracion delegates y protocols
    self.listTableView.dataSource=self;
    self.listTableView.delegate=self;
    accessPackages= [CDAccessPackages sharedManager];
    accessPackages.accessPackageDelegate=self;
    
    [MBProgressHUD showHUDAddedTo:self.view animated:YES];
    CDCustomer *customer=[[CDAccessCustomer sharedManager] getActualCustomer];

    

    [accessPackages  getPackagesList:customer];
    
    
    [super viewDidLoad];
    // Do any additional setup after loading the view.
}

- (void)didReceiveMemoryWarning
{
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

- (NSInteger)numberOfSectionsInTableView:(UITableView *)tableView
{
    return 1;
}

- (NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section
{
    return [self.packagesList count];
}

- (UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath {
    
 
    
    UITableViewCell *cell = [tableView dequeueReusableCellWithIdentifier:@"MyIdentifier"];
    
    /*
     *   If the cell is nil it means no cell was available for reuse and that we should
     *   create a new one.
     */
    if (cell == nil) {
        
        /*
         *   Actually create a new cell (with an identifier so that it can be dequeued).
         */
        
        cell = [[UITableViewCell alloc] initWithStyle:UITableViewCellStyleSubtitle reuseIdentifier:@"MyIdentifier"];
        
        cell.selectionStyle = UITableViewCellSelectionStyleNone;
        
        
        
        CDPackage *actualPackage= [self.packagesList objectAtIndex:indexPath.item];
        
        [cell setBackgroundColor:[UIColor colorWithRed:177/255.0 green:177/255.0 blue:177/255.0 alpha:0]];
        cell.textLabel.text = actualPackage.description;
    }
    
    return cell;
}

//delegate method
-(void)packageFetched:(NSArray *)NSArrayPackage
{
    [MBProgressHUD hideHUDForView:self.view animated:YES];
    self.packagesList= NSArrayPackage;
    [self.listTableView reloadData];
}

- (void)tableView:(UITableView *)tableView didSelectRowAtIndexPath:(NSIndexPath *)indexPath {
    [self performSegueWithIdentifier:@"packageDetails" sender:[self.packagesList objectAtIndex:indexPath.item]];
}


 
#pragma mark - Navigation

// In a storyboard-based application, you will often want to do a little preparation before navigation
- (void)prepareForSegue:(UIStoryboardSegue *)segue sender:(id)sender
{
    if ([[segue identifier] isEqualToString:@"packageDetails"])
    {
        // Get reference to the destination view controller
        CDDetalleViewController *detallePackageViewController = [segue destinationViewController];
        CDPackage *package  = (CDPackage *)sender;
        
        detallePackageViewController.package= package;
        
        
        
    }
}


@end
