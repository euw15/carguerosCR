﻿using CarguerosWebServer.Models;
using System.Data;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace CarguerosWebServer.Services
{
    public abstract class CDCostumerRepository
    {
        public abstract Customer getCostumer(string numeroCuenta);
    }
}