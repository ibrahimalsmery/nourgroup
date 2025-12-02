<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        // إنشاء 10 خدمات تجريبية
        // Service::factory()->count(10)->create();

        $services = [
            [
                'title' => 'الدراسات والأبحاث',
                'subtitle' => 'الدراسات والأبحاث',
                'description' => "
                    إعداد دراسات خط الأساس
                    إجراء دراسات الجدوى الاقتصادية والفنية
                    دراسات تقييم الاحتياجات
                    دراسات السوق
                    الأبحاث المسحية والميدانية
                    دراسات تقييم المخاطر وتحليلها",
                'custom_view' => 'services.research'

            ],
            [
                'title' => 'التدريب',
                'subtitle' => 'التدريب',
                'description' => "
                    برامج تدريبية متخصصة
                    التدريب الوجاهي
                    التدريب الأونلاين
                    التدريب المدمج
                    تطوير المواد التدريبية والأدلة
                    التدريب حسب الطلب",
                'custom_view' => 'services.traning'

            ],
            [

                'title' => 'تطوير الأعمال',
                'subtitle' => 'تطوير الأعمال',
                'description' => "
                    استراتيجيات النمو المبتكرة
                    دعم الشركات الناشئة
                    الشراكات والتحالفات الاستراتيجية
                    التمكين المؤسسي",
                'custom_view' => 'services.business-development'

            ],
            [
                'title' => 'الاستثمار في التعليم الرقمي',
                'subtitle' => 'الاستثمار في التعليم الرقمي',
                'description' => "
                منصة مدرستي في جوالي
                منصات تعليمية رقمية متكاملة
                حلول للتعليم في الطوارئ",
                'custom_view' => 'services.elearning'

            ],
            [
                'title' => 'التوظيف وتوفير الكفاءات',
                'subtitle' => 'التوظيف وتوفير الكفاءات',
                'description' => "
                التوظيف المهني
                العقود المرنة
                إدارة الموارد البشرية بالوكالة
                توفير الخبراء والاستشاريين
                بناء فرق متخصصة
                التوظيف السريع",
                'custom_view' => 'services.staffing'
            ],
        ];

        foreach ($services as $service) {
            # code...
            $service['image'] = '/placeholders/placeholder.png';
            Service::create($service);
        }
    }
}
