﻿using CarguerosWebServer.Models;
using System.Data;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace CarguerosWebServer.Services
{
    public abstract class CDBillingRepository
    {     
     
        public abstract Billing[] showAllBilling();

    }
}