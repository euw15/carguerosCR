﻿using CarguerosWebServer.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace CarguerosWebServer.Services
{
    public abstract class CDContainerManagerHasPackagesRepository
    {
        public abstract ContainerManagerHasPackages[] showAllContainerManagerHasPackages();
    }
}