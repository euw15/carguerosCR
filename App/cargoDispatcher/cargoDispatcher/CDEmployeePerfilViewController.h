//
//  CDEmployeePerfilViewController.h
//  cargoDispatcher
//
//  Created by Macbook Air on 8/20/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import <UIKit/UIKit.h>
#import "CDAccessEmployee.h"


@interface CDEmployeePerfilViewController : UIViewController 

@property (strong) CDEmployee * employee;

@property NSTimer *timerMethod;

@property (strong, nonatomic) IBOutlet UILabel *labelRol;
@property (strong, nonatomic) IBOutlet UILabel *labelTelefono;
@property (strong, nonatomic) IBOutlet UILabel *labelNombre;

- (IBAction)cerrarSeccion:(id)sender;
@end
