﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using CarguerosWebServer.Models;

namespace CarguerosWebServer.Services
{
    public abstract class CDRoleRepository
    {
        public abstract Role[] showAllRole();
    }
}