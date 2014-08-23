//
//  CDDetalleViewController.h
//  cargoDispatcher
//
//  Created by Macbook Air on 8/20/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import <UIKit/UIKit.h>
#import "CDPackage.h"

@interface CDDetalleViewController : UIViewController


@property (weak, nonatomic) IBOutlet UILabel *labelFechaLlegada;
@property (weak, nonatomic) IBOutlet UILabel *labelPesoPackage;
@property (weak, nonatomic) IBOutlet UILabel *labelPeso;

@property (weak, nonatomic) IBOutlet UILabel *labelTipo;
@property (weak, nonatomic) IBOutlet UILabel *labelDescripcion;
@property (weak, nonatomic) IBOutlet UILabel *labelEstadoPaquete;

@property (strong, nonatomic) CDPackage *package;
@end
