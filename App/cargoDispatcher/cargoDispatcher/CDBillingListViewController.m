//
//  CDBillingListViewController.m
//  cargoDispatcher
//
//  Created by Macbook Air on 8/21/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import "CDBillingListViewController.h"

@interface CDBillingListViewController ()

@property CDAccessBilling *billingAccess;
@property NSArray * billingList;

@end

@implementation CDBillingListViewController



- (void)viewDidLoad
{
    
    [self configurateTableView];
    
    [super viewDidLoad];
    // Do any additional setup after loading the view.
}

-(void)configurateTableView
{
    self.billingAccess= [CDAccessBilling sharedManager];
    CDCustomer *customer=[[CDAccessCustomer sharedManager] getActualCustomer];
    
    [MBProgressHUD showHUDAddedTo:self.view animated:YES];
    
    [self.billingAccess getAllCustomerBilling:customer];
    self.billingAccess.accessBillingDelegate=self;
    
    self.UITableViewListBilling.dataSource=self;
    self.UITableViewListBilling.delegate=self;
    
    self.tituloFacturas.text = [NSString stringWithFormat:@"%@ estas son tus Facturas",customer.name];
    
}

//delegate method call by accessBilling
-(void)billingListFethed:(NSArray *)billingList{
    self.billingList=billingList;
    
    [MBProgressHUD hideHUDForView:self.view animated:YES];
    [self.UITableViewListBilling reloadData];
}

- (NSInteger)numberOfSectionsInTableView:(UITableView *)tableView
{
    return 1;
}

- (NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section
{
    return [self.billingList count];
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
        
        
        
        CDBilling *actualBill= [self.billingList objectAtIndex:indexPath.item];
        
        [cell setBackgroundColor:[UIColor colorWithRed:177/255.0 green:177/255.0 blue:177/255.0 alpha:0]];
        cell.textLabel.text = [NSString stringWithFormat:@"Numero Factura: %i",actualBill.idBilling];
    }
    
    return cell;
}



- (void)tableView:(UITableView *)tableView didSelectRowAtIndexPath:(NSIndexPath *)indexPath {
    [self performSegueWithIdentifier:@"abrirDetalle" sender:indexPath];
    [self.billingAccess setBilling:[self.billingList objectAtIndex:indexPath.item]];

}





@end
