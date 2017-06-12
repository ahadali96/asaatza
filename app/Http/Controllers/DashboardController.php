<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DashboardController extends Controller
{
    public function viewtutiondashboard()
    {
    	return view('frontend.dashboardtutioncentre');
    }
    public function viewtutionasettings()
    {
    	return view('frontend.dashboardtutioncentre.academicsettings');
    }
    public function viewtutionpsettings()
    {
    	return view('frontend.dashboardtutioncentre.profilesettings');
    }
    public function viewtutionschedule()
    {
    	return view('frontend.dashboardtutioncentre.schedule');
    }
    public function viewtutionflisting()
    {
    	return view('frontend.dashboardtutioncentre.favoritelisting');
    }
    public function viewtutioninvoice()
    {
    	return view('frontend.dashboardtutioncentre.invoices');
    }
    public function viewtutionup()
    {
    	return view('frontend.dashboardtutioncentre.upgradepackage');
    }
    public function viewtutionssettings()
    {
    	return view('frontend.dashboardtutioncentre.securitysettings');
    }
    public function viewtutionprisettings()
    {
    	return view('frontend.dashboardtutioncentre.privacysettings');
    }
    public function viewtutionpjob()
    {
    	return view('frontend.dashboardtutioncentre.jobs');
    }
    public function viewtutordashboard()
    {
    	return view('frontend.dashboardtutor');
    }
    public function viewtutorprofilesettings()
    {
    	return view('frontend.dashboardtutor.profilesetting');
    }
    public function viewtutorschedule()
    {
    	return view('frontend.dashboardtutor.schedule');
    }
    public function viewtutorflisting()
    {
    	return view('frontend.dashboardtutor.favouritelisting');
    }
    public function viewtutorup()
    {
    	return view('frontend.dashboardtutor.upgradepackage');
    }
    public function viewtutorssettings()
    {
    	return view('frontend.dashboardtutor.securitysetting');
    }
    public function viewtutorprivacysetting()
    {
    	return view('frontend.dashboardtutor.privacysetting');
    }
    public function viewdashboardparents()
    {
    	return view('frontend.dashboardparents');
    }
    public function viewparentprofilesettings()
    {
    	return view('frontend.dashboardparents.profilesettings');
    }
    public function viewparentflisting()
    {
    	return view('frontend.dashboardparents.favoritelisting');
    }
    public function viewparentup()
    {
    	return view('frontend.dashboardparents.upgradepackage');
    }
    public function viewparentssettings()
    {
    	return view('frontend.dashboardparents.securitysettings');
    }
    public function viewparentprivacysetting()
    {
    	return view('frontend.dashboardparents.privacysettings');
    }
}
