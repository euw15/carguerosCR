//
//  CDEmployeePerfilViewController.h
//  cargoDispatcher
//
//  Created by Macbook Air on 8/20/14.
//  Copyright (c) 2014 Macbook Air. All rights reserved.
//

#import <UIKit/UIKit.h>
#import "CDAccessEmployee.h"
#import "CDAccessContainers.h"

@interface CDEmployeePerfilViewController : UIViewController <AccessContainerDelegate>

@property (strong) CDEmployee * employee;
@property NSTimer *timerMethod;
@property CDAccessContainers *accessContainers;
@property (strong, nonatomic) IBOutlet UILabel *labelRol;
@property (strong, nonatomic) IBOutlet UILabel *labelTelefono;
@property (strong, nonatomic) IBOutlet UILabel *labelNombre;

- (IBAction)cerrarSeccion:(id)sender;
@end
