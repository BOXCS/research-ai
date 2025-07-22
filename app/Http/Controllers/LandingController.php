<?php

namespace App\Http\Controllers;

use App\Models\CommunityService;
use App\Models\PengabdianMasyarakat;
use App\Models\Publication;
use App\Models\ResearchProduct;
use App\Models\Team;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    // public function index()
    // {
    //     // Sample data - replace with actual database queries
    //     $researchProducts = [
    //         [
    //             'id' => 1,
    //             'title' => 'AI-Powered Medical Diagnosis System',
    //             'description' => 'Advanced machine learning system for early disease detection and diagnosis support for healthcare professionals.',
    //             'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
    //             'image' => 'https://via.placeholder.com/400x300/4f46e5/ffffff?text=Medical+AI',
    //             'category' => 'Healthcare AI',
    //             'status' => 'Active',
    //             'duration' => '2023-2025'
    //         ],
    //         [
    //             'id' => 2,
    //             'title' => 'Smart Agricultural Monitoring',
    //             'description' => 'IoT-based crop monitoring system using computer vision and sensor networks for precision agriculture.',
    //             'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
    //             'image' => 'https://via.placeholder.com/400x300/059669/ffffff?text=AgriTech',
    //             'category' => 'Agriculture Tech',
    //             'status' => 'Completed',
    //             'duration' => '2022-2024'
    //         ],
    //         [
    //             'id' => 3,
    //             'title' => 'Natural Language Processing for Education',
    //             'description' => 'Automated essay grading and feedback system using advanced NLP techniques for educational institutions.',
    //             'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
    //             'image' => 'https://via.placeholder.com/400x300/dc2626/ffffff?text=EduTech',
    //             'category' => 'Education Tech',
    //             'status' => 'In Progress',
    //             'duration' => '2024-2026'
    //         ]
    //     ];

    //     $publications = [
    //         [
    //             'id' => 1,
    //             'title' => 'Deep Learning Approaches for Medical Image Analysis: A Comprehensive Review',
    //             'authors' => 'Dr. Sarah Johnson, Prof. Michael Chen, Dr. Lisa Anderson',
    //             'journal' => 'Journal of Medical AI Research',
    //             'year' => 2024,
    //             'volume' => '15',
    //             'issue' => '3',
    //             'pages' => '245-267',
    //             'doi' => '10.1000/jmar.2024.15.3.245',
    //             'impact_factor' => '8.5',
    //             'citation_count' => 47,
    //             'abstract' => 'This comprehensive review examines the latest developments in deep learning methodologies for medical image analysis, focusing on diagnostic accuracy improvements and clinical implementation challenges.',
    //             'pdf_url' => '#',
    //             'category' => 'Medical AI'
    //         ],
    //         [
    //             'id' => 2,
    //             'title' => 'Federated Learning for Privacy-Preserving Healthcare Analytics',
    //             'authors' => 'Prof. David Williams, Dr. Emma Rodriguez, Dr. James Kim',
    //             'journal' => 'IEEE Transactions on Biomedical Engineering',
    //             'year' => 2024,
    //             'volume' => '71',
    //             'issue' => '8',
    //             'pages' => '2156-2167',
    //             'doi' => '10.1109/tbme.2024.3401234',
    //             'impact_factor' => '4.7',
    //             'citation_count' => 23,
    //             'abstract' => 'We propose a novel federated learning framework that enables collaborative healthcare analytics while preserving patient privacy through advanced cryptographic techniques.',
    //             'pdf_url' => '#',
    //             'category' => 'Privacy & Security'
    //         ],
    //         [
    //             'id' => 3,
    //             'title' => 'Sustainable AI: Energy-Efficient Deep Learning Models for Edge Computing',
    //             'authors' => 'Dr. Alex Thompson, Dr. Maria Santos, Prof. Robert Lee',
    //             'journal' => 'Nature Machine Intelligence',
    //             'year' => 2023,
    //             'volume' => '5',
    //             'issue' => '12',
    //             'pages' => '1045-1058',
    //             'doi' => '10.1038/s42256-023-00745-x',
    //             'impact_factor' => '12.8',
    //             'citation_count' => 156,
    //             'abstract' => 'This paper presents novel techniques for developing energy-efficient deep learning models suitable for deployment on edge devices while maintaining competitive performance.',
    //             'pdf_url' => '#',
    //             'category' => 'Green AI'
    //         ]
    //     ];

    //     $communityPrograms = [
    //         [
    //             'id' => 1,
    //             'title' => 'AI Literacy Workshop for Teachers',
    //             'description' => 'Free workshops designed to help educators integrate AI tools into their teaching methodologies and understand AI ethics.',
    //             'image' => 'https://via.placeholder.com/400x300/7c3aed/ffffff?text=AI+Education',
    //             'target_audience' => 'Elementary & High School Teachers',
    //             'duration' => '3 days',
    //             'participants' => 150,
    //             'location' => 'Various Schools in East Java',
    //             'date' => '2024-03-15',
    //             'status' => 'Completed',
    //             'impact' => '150 teachers trained, 50 schools impacted'
    //         ],
    //         [
    //             'id' => 2,
    //             'title' => 'Smart Village Technology Initiative',
    //             'description' => 'Implementing IoT solutions and digital literacy programs in rural communities to bridge the digital divide.',
    //             'image' => 'https://via.placeholder.com/400x300/ea580c/ffffff?text=Smart+Village',
    //             'target_audience' => 'Rural Communities',
    //             'duration' => '6 months',
    //             'participants' => 500,
    //             'location' => 'Rural Areas of Jember Regency',
    //             'date' => '2024-01-10',
    //             'status' => 'Ongoing',
    //             'impact' => '5 villages connected, 500 residents trained'
    //         ],
    //         [
    //             'id' => 3,
    //             'title' => 'Healthcare AI Awareness Campaign',
    //             'description' => 'Educational program to increase public awareness about AI applications in healthcare and address common misconceptions.',
    //             'image' => 'https://via.placeholder.com/400x300/dc2626/ffffff?text=Health+AI',
    //             'target_audience' => 'General Public & Healthcare Workers',
    //             'duration' => '2 months',
    //             'participants' => 300,
    //             'location' => 'Community Health Centers',
    //             'date' => '2024-05-20',
    //             'status' => 'Planned',
    //             'impact' => 'Expected: 300 participants, 10 health centers'
    //         ]
    //     ];

    //     $teamMembers = [
    //         [
    //             'id' => 1,
    //             'name' => 'Prof. Dr. Sarah Johnson',
    //             'position' => 'Research Director & Principal Investigator',
    //             'specialization' => 'Machine Learning, Medical AI, Computer Vision',
    //             'education' => 'PhD in Computer Science - Stanford University',
    //             'experience' => '15 years in AI research',
    //             'image' => 'https://via.placeholder.com/300x300/4f46e5/ffffff?text=SJ',
    //             'email' => 'sarah.johnson@research-ai.my.id',
    //             'linkedin' => 'https://linkedin.com/in/sarah-johnson-ai',
    //             'google_scholar' => 'https://scholar.google.com/citations?user=abc123',
    //             'publications' => 85,
    //             'h_index' => 32,
    //             'bio' => 'Leading expert in medical AI with focus on diagnostic imaging and machine learning applications in healthcare.'
    //         ],
    //         [
    //             'id' => 2,
    //             'name' => 'Dr. Michael Chen',
    //             'position' => 'Senior Research Scientist',
    //             'specialization' => 'Natural Language Processing, Deep Learning',
    //             'education' => 'PhD in Artificial Intelligence - MIT',
    //             'experience' => '12 years in NLP research',
    //             'image' => 'https://via.placeholder.com/300x300/059669/ffffff?text=MC',
    //             'email' => 'michael.chen@research-ai.my.id',
    //             'linkedin' => 'https://linkedin.com/in/michael-chen-nlp',
    //             'google_scholar' => 'https://scholar.google.com/citations?user=def456',
    //             'publications' => 67,
    //             'h_index' => 28,
    //             'bio' => 'Specialized in developing advanced NLP models for educational applications and multilingual processing.'
    //         ],
    //         [
    //             'id' => 3,
    //             'name' => 'Dr. Lisa Anderson',
    //             'position' => 'Research Scientist',
    //             'specialization' => 'Robotics, IoT, Edge Computing',
    //             'education' => 'PhD in Robotics - Carnegie Mellon University',
    //             'experience' => '10 years in robotics and IoT',
    //             'image' => 'https://via.placeholder.com/300x300/dc2626/ffffff?text=LA',
    //             'email' => 'lisa.anderson@research-ai.my.id',
    //             'linkedin' => 'https://linkedin.com/in/lisa-anderson-robotics',
    //             'google_scholar' => 'https://scholar.google.com/citations?user=ghi789',
    //             'publications' => 45,
    //             'h_index' => 22,
    //             'bio' => 'Expert in autonomous systems and IoT applications for smart agriculture and environmental monitoring.'
    //         ],
    //         [
    //             'id' => 4,
    //             'name' => 'Dr. David Williams',
    //             'position' => 'Data Science Lead',
    //             'specialization' => 'Big Data Analytics, Privacy-Preserving ML',
    //             'education' => 'PhD in Statistics - University of Oxford',
    //             'experience' => '8 years in data science',
    //             'image' => 'https://via.placeholder.com/300x300/7c3aed/ffffff?text=DW',
    //             'email' => 'david.williams@research-ai.my.id',
    //             'linkedin' => 'https://linkedin.com/in/david-williams-datascience',
    //             'google_scholar' => 'https://scholar.google.com/citations?user=jkl012',
    //             'publications' => 52,
    //             'h_index' => 25,
    //             'bio' => 'Focuses on developing privacy-preserving machine learning algorithms and federated learning systems.'
    //         ]
    //     ];

    //     return view('landing', compact('researchProducts', 'publications', 'communityPrograms', 'teamMembers'));
    // }

    public function index()
    {
        $researchProducts = ResearchProduct::all();
        $publications = Publication::all();
        $communityPrograms = CommunityService::all();
        $teamMembers = TeamMember::all();

        return view('landing', compact(
            'researchProducts',
            'publications',
            'communityPrograms',
            'teamMembers'
        ));
    }
}
