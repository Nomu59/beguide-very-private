<?php

namespace App\Controller\Admin;

use App\Entity\Communaute;
use App\Entity\Onboarding;
use App\Entity\Tutorial;
use App\Entity\Utilisateur;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
    
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Beguide Administration')
            ->renderContentMaximized();
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Utilisateur', 'fa-regular fa-user', Utilisateur::class);
        yield MenuItem::linkToCrud('Onboarding', 'fa-solid fa-table', Onboarding::class);
        yield MenuItem::linkToCrud('Tutoriel', 'fa-solid fa-lines-leaning', Tutorial::class);
        yield MenuItem::linkToCrud('Communauté', 'fa-solid fa-people-group', Communaute::class);
    }
}
