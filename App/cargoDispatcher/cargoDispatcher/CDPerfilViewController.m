//
//  PerfilViewController.m
//  cargoDispatcher
//
//  Created by Macbook Air on 8/17/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import "CDPerfilViewController.h"

@interface CDPerfilViewController ()



@end

@implementation CDPerfilViewController


- (void)viewDidLoad
{
    
    [self mostrarInformacionUsuario];
    [super viewDidLoad];
    // Do any additional setup after loading the view.
}

- (void)didReceiveMemoryWarning
{
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

-(void)mostrarInformacionUsuario{
    self.customer = [[CDAccessCustomer sharedManager] getActualCustomer];
    NSString *completeName = [NSString stringWithFormat:@"%@ %@", self.customer.name,self.customer.lastName];
    
    self.nameUILabel.text        = completeName;
    self.accountNumberLabel.text = [NSString stringWithFormat:@"%d",self.customer.account];
    self.accountTypeLabel.text   = self.customer.type;
    self.scoreLabel.text         = [NSString stringWithFormat:@"%d",self.customer.score];
    
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

- (IBAction)cerrarSeccion:(id)sender {
    //cierra la secci'on
    CDAccessCustomer * accessCustomer= [CDAccessCustomer sharedManager];
    accessCustomer.customer=nil;
    
    
    [self performSegueWithIdentifier:@"cerrarSeccion" sender:nil];
}
@end
