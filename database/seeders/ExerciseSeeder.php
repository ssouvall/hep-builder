<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Exercise;

class ExerciseSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('exercises')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('exercises')->insert([
            [
                'title' => 'Bird Dog',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer hendrerit faucibus mattis. Suspendisse non commodo enim, non sodales turpis. Curabitur congue est eu ex porta tristique. Aenean consequat justo massa, ac commodo est hendrerit et. In hac habitasse platea dictumst. Integer mollis purus eget nulla viverra venenatis. Fusce blandit luctus nisi, ac finibus dolor maximus vel. Fusce rhoncus vestibulum libero, nec bibendum ligula varius quis. Nulla facilisi. Proin nec eros vestibulum, tempus purus ac, euismod tellus.',
                'instructions' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer elit dui, consequat a bibendum at, finibus et quam. Proin elit velit, bibendum vitae tortor id, accumsan ultrices arcu. Donec pulvinar, ex eget condimentum aliquet, sem ex facilisis metus, quis vehicula leo est sit amet velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc tristique arcu massa, at placerat metus iaculis vitae. Nam ac dignissim lectus. Morbi bibendum scelerisque metus eu accumsan.',
                'image' => '/img/hep-img/BirdDog.PNG',
                'isPrivate' => false
            ],
            [
                'title' => 'Chin Tuck',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer hendrerit faucibus mattis. Suspendisse non commodo enim, non sodales turpis. Curabitur congue est eu ex porta tristique. Aenean consequat justo massa, ac commodo est hendrerit et. In hac habitasse platea dictumst. Integer mollis purus eget nulla viverra venenatis. Fusce blandit luctus nisi, ac finibus dolor maximus vel. Fusce rhoncus vestibulum libero, nec bibendum ligula varius quis. Nulla facilisi. Proin nec eros vestibulum, tempus purus ac, euismod tellus.',
                'instructions' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer elit dui, consequat a bibendum at, finibus et quam. Proin elit velit, bibendum vitae tortor id, accumsan ultrices arcu. Donec pulvinar, ex eget condimentum aliquet, sem ex facilisis metus, quis vehicula leo est sit amet velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc tristique arcu massa, at placerat metus iaculis vitae. Nam ac dignissim lectus. Morbi bibendum scelerisque metus eu accumsan.',
                'image' => '/img/hep-img/ChinTuck.PNG',
                'isPrivate' => false
            ],
            [
                'title' => 'Clam Shell',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer hendrerit faucibus mattis. Suspendisse non commodo enim, non sodales turpis. Curabitur congue est eu ex porta tristique. Aenean consequat justo massa, ac commodo est hendrerit et. In hac habitasse platea dictumst. Integer mollis purus eget nulla viverra venenatis. Fusce blandit luctus nisi, ac finibus dolor maximus vel. Fusce rhoncus vestibulum libero, nec bibendum ligula varius quis. Nulla facilisi. Proin nec eros vestibulum, tempus purus ac, euismod tellus.',
                'instructions' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer elit dui, consequat a bibendum at, finibus et quam. Proin elit velit, bibendum vitae tortor id, accumsan ultrices arcu. Donec pulvinar, ex eget condimentum aliquet, sem ex facilisis metus, quis vehicula leo est sit amet velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc tristique arcu massa, at placerat metus iaculis vitae. Nam ac dignissim lectus. Morbi bibendum scelerisque metus eu accumsan.',
                'image' => '/img/hep-img/ClamShell.PNG',
                'isPrivate' => false
            ],
            [
                'title' => 'Shoulder External Rotation',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer hendrerit faucibus mattis. Suspendisse non commodo enim, non sodales turpis. Curabitur congue est eu ex porta tristique. Aenean consequat justo massa, ac commodo est hendrerit et. In hac habitasse platea dictumst. Integer mollis purus eget nulla viverra venenatis. Fusce blandit luctus nisi, ac finibus dolor maximus vel. Fusce rhoncus vestibulum libero, nec bibendum ligula varius quis. Nulla facilisi. Proin nec eros vestibulum, tempus purus ac, euismod tellus.',
                'instructions' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer elit dui, consequat a bibendum at, finibus et quam. Proin elit velit, bibendum vitae tortor id, accumsan ultrices arcu. Donec pulvinar, ex eget condimentum aliquet, sem ex facilisis metus, quis vehicula leo est sit amet velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc tristique arcu massa, at placerat metus iaculis vitae. Nam ac dignissim lectus. Morbi bibendum scelerisque metus eu accumsan.',
                'image' => '/img/hep-img/ExternalRotation.PNG',
                'isPrivate' => false
            ],
            [
                'title' => 'Standing Heel Raise',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer hendrerit faucibus mattis. Suspendisse non commodo enim, non sodales turpis. Curabitur congue est eu ex porta tristique. Aenean consequat justo massa, ac commodo est hendrerit et. In hac habitasse platea dictumst. Integer mollis purus eget nulla viverra venenatis. Fusce blandit luctus nisi, ac finibus dolor maximus vel. Fusce rhoncus vestibulum libero, nec bibendum ligula varius quis. Nulla facilisi. Proin nec eros vestibulum, tempus purus ac, euismod tellus.',
                'instructions' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer elit dui, consequat a bibendum at, finibus et quam. Proin elit velit, bibendum vitae tortor id, accumsan ultrices arcu. Donec pulvinar, ex eget condimentum aliquet, sem ex facilisis metus, quis vehicula leo est sit amet velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc tristique arcu massa, at placerat metus iaculis vitae. Nam ac dignissim lectus. Morbi bibendum scelerisque metus eu accumsan.',
                'image' => '/img/hep-img/HeelRaise.PNG',
                'isPrivate' => false
            ],
            [
                'title' => 'Knee Extension',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer hendrerit faucibus mattis. Suspendisse non commodo enim, non sodales turpis. Curabitur congue est eu ex porta tristique. Aenean consequat justo massa, ac commodo est hendrerit et. In hac habitasse platea dictumst. Integer mollis purus eget nulla viverra venenatis. Fusce blandit luctus nisi, ac finibus dolor maximus vel. Fusce rhoncus vestibulum libero, nec bibendum ligula varius quis. Nulla facilisi. Proin nec eros vestibulum, tempus purus ac, euismod tellus.',
                'instructions' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer elit dui, consequat a bibendum at, finibus et quam. Proin elit velit, bibendum vitae tortor id, accumsan ultrices arcu. Donec pulvinar, ex eget condimentum aliquet, sem ex facilisis metus, quis vehicula leo est sit amet velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc tristique arcu massa, at placerat metus iaculis vitae. Nam ac dignissim lectus. Morbi bibendum scelerisque metus eu accumsan.',
                'image' => '/img/hep-img/KneeExtension.PNG',
                'isPrivate' => false
            ],
            [
                'title' => 'Knee Flexion AAROM',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer hendrerit faucibus mattis. Suspendisse non commodo enim, non sodales turpis. Curabitur congue est eu ex porta tristique. Aenean consequat justo massa, ac commodo est hendrerit et. In hac habitasse platea dictumst. Integer mollis purus eget nulla viverra venenatis. Fusce blandit luctus nisi, ac finibus dolor maximus vel. Fusce rhoncus vestibulum libero, nec bibendum ligula varius quis. Nulla facilisi. Proin nec eros vestibulum, tempus purus ac, euismod tellus.',
                'instructions' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer elit dui, consequat a bibendum at, finibus et quam. Proin elit velit, bibendum vitae tortor id, accumsan ultrices arcu. Donec pulvinar, ex eget condimentum aliquet, sem ex facilisis metus, quis vehicula leo est sit amet velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc tristique arcu massa, at placerat metus iaculis vitae. Nam ac dignissim lectus. Morbi bibendum scelerisque metus eu accumsan.',
                'image' => '/img/hep-img/KneeFlexionRom.PNG',
                'isPrivate' => false
            ],
            [
                'title' => 'Lumbar Extension',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer hendrerit faucibus mattis. Suspendisse non commodo enim, non sodales turpis. Curabitur congue est eu ex porta tristique. Aenean consequat justo massa, ac commodo est hendrerit et. In hac habitasse platea dictumst. Integer mollis purus eget nulla viverra venenatis. Fusce blandit luctus nisi, ac finibus dolor maximus vel. Fusce rhoncus vestibulum libero, nec bibendum ligula varius quis. Nulla facilisi. Proin nec eros vestibulum, tempus purus ac, euismod tellus.',
                'instructions' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer elit dui, consequat a bibendum at, finibus et quam. Proin elit velit, bibendum vitae tortor id, accumsan ultrices arcu. Donec pulvinar, ex eget condimentum aliquet, sem ex facilisis metus, quis vehicula leo est sit amet velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc tristique arcu massa, at placerat metus iaculis vitae. Nam ac dignissim lectus. Morbi bibendum scelerisque metus eu accumsan.',
                'image' => '/img/hep-img/LumbarExtension.PNG',
                'isPrivate' => false
            ],
            [
                'title' => 'Pendulum',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer hendrerit faucibus mattis. Suspendisse non commodo enim, non sodales turpis. Curabitur congue est eu ex porta tristique. Aenean consequat justo massa, ac commodo est hendrerit et. In hac habitasse platea dictumst. Integer mollis purus eget nulla viverra venenatis. Fusce blandit luctus nisi, ac finibus dolor maximus vel. Fusce rhoncus vestibulum libero, nec bibendum ligula varius quis. Nulla facilisi. Proin nec eros vestibulum, tempus purus ac, euismod tellus.',
                'instructions' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer elit dui, consequat a bibendum at, finibus et quam. Proin elit velit, bibendum vitae tortor id, accumsan ultrices arcu. Donec pulvinar, ex eget condimentum aliquet, sem ex facilisis metus, quis vehicula leo est sit amet velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc tristique arcu massa, at placerat metus iaculis vitae. Nam ac dignissim lectus. Morbi bibendum scelerisque metus eu accumsan.',
                'image' => '/img/hep-img/Pendulums.PNG',
                'isPrivate' => false
            ],
            [
                'title' => 'Prone Row',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer hendrerit faucibus mattis. Suspendisse non commodo enim, non sodales turpis. Curabitur congue est eu ex porta tristique. Aenean consequat justo massa, ac commodo est hendrerit et. In hac habitasse platea dictumst. Integer mollis purus eget nulla viverra venenatis. Fusce blandit luctus nisi, ac finibus dolor maximus vel. Fusce rhoncus vestibulum libero, nec bibendum ligula varius quis. Nulla facilisi. Proin nec eros vestibulum, tempus purus ac, euismod tellus.',
                'instructions' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer elit dui, consequat a bibendum at, finibus et quam. Proin elit velit, bibendum vitae tortor id, accumsan ultrices arcu. Donec pulvinar, ex eget condimentum aliquet, sem ex facilisis metus, quis vehicula leo est sit amet velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc tristique arcu massa, at placerat metus iaculis vitae. Nam ac dignissim lectus. Morbi bibendum scelerisque metus eu accumsan.',
                'image' => '/img/hep-img/ProneRow.PNG',
                'isPrivate' => false
            ],
            [
                'title' => 'Push Ups',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer hendrerit faucibus mattis. Suspendisse non commodo enim, non sodales turpis. Curabitur congue est eu ex porta tristique. Aenean consequat justo massa, ac commodo est hendrerit et. In hac habitasse platea dictumst. Integer mollis purus eget nulla viverra venenatis. Fusce blandit luctus nisi, ac finibus dolor maximus vel. Fusce rhoncus vestibulum libero, nec bibendum ligula varius quis. Nulla facilisi. Proin nec eros vestibulum, tempus purus ac, euismod tellus.',
                'instructions' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer elit dui, consequat a bibendum at, finibus et quam. Proin elit velit, bibendum vitae tortor id, accumsan ultrices arcu. Donec pulvinar, ex eget condimentum aliquet, sem ex facilisis metus, quis vehicula leo est sit amet velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc tristique arcu massa, at placerat metus iaculis vitae. Nam ac dignissim lectus. Morbi bibendum scelerisque metus eu accumsan.',
                'image' => '/img/hep-img/PushUp.PNG',
                'isPrivate' => false
            ],
            [
                'title' => 'Prone Scapular Retraction',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer hendrerit faucibus mattis. Suspendisse non commodo enim, non sodales turpis. Curabitur congue est eu ex porta tristique. Aenean consequat justo massa, ac commodo est hendrerit et. In hac habitasse platea dictumst. Integer mollis purus eget nulla viverra venenatis. Fusce blandit luctus nisi, ac finibus dolor maximus vel. Fusce rhoncus vestibulum libero, nec bibendum ligula varius quis. Nulla facilisi. Proin nec eros vestibulum, tempus purus ac, euismod tellus.',
                'instructions' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer elit dui, consequat a bibendum at, finibus et quam. Proin elit velit, bibendum vitae tortor id, accumsan ultrices arcu. Donec pulvinar, ex eget condimentum aliquet, sem ex facilisis metus, quis vehicula leo est sit amet velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc tristique arcu massa, at placerat metus iaculis vitae. Nam ac dignissim lectus. Morbi bibendum scelerisque metus eu accumsan.',
                'image' => '/img/hep-img/ScapRetractions.PNG',
                'isPrivate' => false
            ],
            [
                'title' => 'Seated Hip Abduction',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer hendrerit faucibus mattis. Suspendisse non commodo enim, non sodales turpis. Curabitur congue est eu ex porta tristique. Aenean consequat justo massa, ac commodo est hendrerit et. In hac habitasse platea dictumst. Integer mollis purus eget nulla viverra venenatis. Fusce blandit luctus nisi, ac finibus dolor maximus vel. Fusce rhoncus vestibulum libero, nec bibendum ligula varius quis. Nulla facilisi. Proin nec eros vestibulum, tempus purus ac, euismod tellus.',
                'instructions' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer elit dui, consequat a bibendum at, finibus et quam. Proin elit velit, bibendum vitae tortor id, accumsan ultrices arcu. Donec pulvinar, ex eget condimentum aliquet, sem ex facilisis metus, quis vehicula leo est sit amet velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc tristique arcu massa, at placerat metus iaculis vitae. Nam ac dignissim lectus. Morbi bibendum scelerisque metus eu accumsan.',
                'image' => '/img/hep-img/SeatedHipAbd.PNG',
                'isPrivate' => false
            ],
            [
                'title' => 'Short Arc Quad',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer hendrerit faucibus mattis. Suspendisse non commodo enim, non sodales turpis. Curabitur congue est eu ex porta tristique. Aenean consequat justo massa, ac commodo est hendrerit et. In hac habitasse platea dictumst. Integer mollis purus eget nulla viverra venenatis. Fusce blandit luctus nisi, ac finibus dolor maximus vel. Fusce rhoncus vestibulum libero, nec bibendum ligula varius quis. Nulla facilisi. Proin nec eros vestibulum, tempus purus ac, euismod tellus.',
                'instructions' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer elit dui, consequat a bibendum at, finibus et quam. Proin elit velit, bibendum vitae tortor id, accumsan ultrices arcu. Donec pulvinar, ex eget condimentum aliquet, sem ex facilisis metus, quis vehicula leo est sit amet velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc tristique arcu massa, at placerat metus iaculis vitae. Nam ac dignissim lectus. Morbi bibendum scelerisque metus eu accumsan.',
                'image' => '/img/hep-img/ShortArcQuad.PNG',
                'isPrivate' => false
            ],
            [
                'title' => 'Single Leg Balance',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer hendrerit faucibus mattis. Suspendisse non commodo enim, non sodales turpis. Curabitur congue est eu ex porta tristique. Aenean consequat justo massa, ac commodo est hendrerit et. In hac habitasse platea dictumst. Integer mollis purus eget nulla viverra venenatis. Fusce blandit luctus nisi, ac finibus dolor maximus vel. Fusce rhoncus vestibulum libero, nec bibendum ligula varius quis. Nulla facilisi. Proin nec eros vestibulum, tempus purus ac, euismod tellus.',
                'instructions' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer elit dui, consequat a bibendum at, finibus et quam. Proin elit velit, bibendum vitae tortor id, accumsan ultrices arcu. Donec pulvinar, ex eget condimentum aliquet, sem ex facilisis metus, quis vehicula leo est sit amet velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc tristique arcu massa, at placerat metus iaculis vitae. Nam ac dignissim lectus. Morbi bibendum scelerisque metus eu accumsan.',
                'image' => '/img/hep-img/SingleLegBalance.PNG',
                'isPrivate' => false
            ],
            [
                'title' => 'Squat',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer hendrerit faucibus mattis. Suspendisse non commodo enim, non sodales turpis. Curabitur congue est eu ex porta tristique. Aenean consequat justo massa, ac commodo est hendrerit et. In hac habitasse platea dictumst. Integer mollis purus eget nulla viverra venenatis. Fusce blandit luctus nisi, ac finibus dolor maximus vel. Fusce rhoncus vestibulum libero, nec bibendum ligula varius quis. Nulla facilisi. Proin nec eros vestibulum, tempus purus ac, euismod tellus.',
                'instructions' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer elit dui, consequat a bibendum at, finibus et quam. Proin elit velit, bibendum vitae tortor id, accumsan ultrices arcu. Donec pulvinar, ex eget condimentum aliquet, sem ex facilisis metus, quis vehicula leo est sit amet velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc tristique arcu massa, at placerat metus iaculis vitae. Nam ac dignissim lectus. Morbi bibendum scelerisque metus eu accumsan.',
                'image' => '/img/hep-img/Squat.PNG',
                'isPrivate' => false
            ],
            [
                'title' => 'Banded Shoulder Abduction',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer hendrerit faucibus mattis. Suspendisse non commodo enim, non sodales turpis. Curabitur congue est eu ex porta tristique. Aenean consequat justo massa, ac commodo est hendrerit et. In hac habitasse platea dictumst. Integer mollis purus eget nulla viverra venenatis. Fusce blandit luctus nisi, ac finibus dolor maximus vel. Fusce rhoncus vestibulum libero, nec bibendum ligula varius quis. Nulla facilisi. Proin nec eros vestibulum, tempus purus ac, euismod tellus.',
                'instructions' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer elit dui, consequat a bibendum at, finibus et quam. Proin elit velit, bibendum vitae tortor id, accumsan ultrices arcu. Donec pulvinar, ex eget condimentum aliquet, sem ex facilisis metus, quis vehicula leo est sit amet velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc tristique arcu massa, at placerat metus iaculis vitae. Nam ac dignissim lectus. Morbi bibendum scelerisque metus eu accumsan.',
                'image' => '/img/hep-img/StandingAbduction.PNG',
                'isPrivate' => false
            ],
            [
                'title' => 'Wand ER AAROM',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer hendrerit faucibus mattis. Suspendisse non commodo enim, non sodales turpis. Curabitur congue est eu ex porta tristique. Aenean consequat justo massa, ac commodo est hendrerit et. In hac habitasse platea dictumst. Integer mollis purus eget nulla viverra venenatis. Fusce blandit luctus nisi, ac finibus dolor maximus vel. Fusce rhoncus vestibulum libero, nec bibendum ligula varius quis. Nulla facilisi. Proin nec eros vestibulum, tempus purus ac, euismod tellus.',
                'instructions' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer elit dui, consequat a bibendum at, finibus et quam. Proin elit velit, bibendum vitae tortor id, accumsan ultrices arcu. Donec pulvinar, ex eget condimentum aliquet, sem ex facilisis metus, quis vehicula leo est sit amet velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc tristique arcu massa, at placerat metus iaculis vitae. Nam ac dignissim lectus. Morbi bibendum scelerisque metus eu accumsan.',
                'image' => '/img/hep-img/WandErAarom.PNG',
                'isPrivate' => false
            ],
            [
                'title' => 'Lunge',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer hendrerit faucibus mattis. Suspendisse non commodo enim, non sodales turpis. Curabitur congue est eu ex porta tristique. Aenean consequat justo massa, ac commodo est hendrerit et. In hac habitasse platea dictumst. Integer mollis purus eget nulla viverra venenatis. Fusce blandit luctus nisi, ac finibus dolor maximus vel. Fusce rhoncus vestibulum libero, nec bibendum ligula varius quis. Nulla facilisi. Proin nec eros vestibulum, tempus purus ac, euismod tellus.',
                'instructions' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer elit dui, consequat a bibendum at, finibus et quam. Proin elit velit, bibendum vitae tortor id, accumsan ultrices arcu. Donec pulvinar, ex eget condimentum aliquet, sem ex facilisis metus, quis vehicula leo est sit amet velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc tristique arcu massa, at placerat metus iaculis vitae. Nam ac dignissim lectus. Morbi bibendum scelerisque metus eu accumsan.',
                'image' => '/img/hep-img/Lunge.PNG',
                'isPrivate' => false
            ],
            [
                'title' => 'Prone Shoulder Y',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer hendrerit faucibus mattis. Suspendisse non commodo enim, non sodales turpis. Curabitur congue est eu ex porta tristique. Aenean consequat justo massa, ac commodo est hendrerit et. In hac habitasse platea dictumst. Integer mollis purus eget nulla viverra venenatis. Fusce blandit luctus nisi, ac finibus dolor maximus vel. Fusce rhoncus vestibulum libero, nec bibendum ligula varius quis. Nulla facilisi. Proin nec eros vestibulum, tempus purus ac, euismod tellus.',
                'instructions' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer elit dui, consequat a bibendum at, finibus et quam. Proin elit velit, bibendum vitae tortor id, accumsan ultrices arcu. Donec pulvinar, ex eget condimentum aliquet, sem ex facilisis metus, quis vehicula leo est sit amet velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc tristique arcu massa, at placerat metus iaculis vitae. Nam ac dignissim lectus. Morbi bibendum scelerisque metus eu accumsan.',
                'image' => '/img/hep-img/Ys.PNG',
                'isPrivate' => false
            ]
        ]);    
    }
}