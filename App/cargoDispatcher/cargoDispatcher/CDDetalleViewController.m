//
//  CDDetalleViewController.m
//  cargoDispatcher
//
//  Created by Macbook Air on 8/20/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import "CDDetalleViewController.h"

@interface CDDetalleViewController ()

@end

@implementation CDDetalleViewController

@synthesize labelDescripcion,labelPeso,labelFechaLlegada,labelPesoPackage,labelTipo,package,labelEstadoPaquete;

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
    if([package.containerArrivalDate isEqualToString:@"-"]){labelFechaLlegada.text= @"Fecha llegada: No estimada";}
    else{ labelFechaLlegada.text= [NSString stringWithFormat:@"Fecha llegada: %@", package.containerArrivalDate];}
    
    labelPesoPackage.text= [NSString stringWithFormat:@"Peso: %i kg", package.weight];
    labelPeso.text= [NSString stringWithFormat:@"Precio: %i", package.price];
    labelTipo.text= [NSString stringWithFormat:@"Tipo: %@", package.type];
    labelDescripcion.text = [NSString stringWithFormat:@"Descripción: %@", package.description];
    labelEstadoPaquete.text = [NSString stringWithFormat:@"Estado: %@",package.packageState];
    [super viewDidLoad];
    // Do any additional setup after loading the view.
}

- (void)didReceiveMemoryWarning
{
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}


#pragma mark - Navigation

// In a storyboard-based application, you will often want to do a little preparation before navigation
- (void)prepareForSegue:(UIStoryboardSegue *)segue sender:(id)sender
{
    // Get the new view controller using [segue destinationViewController].
    // Pass the selected object to the new view controller.
}


@end
